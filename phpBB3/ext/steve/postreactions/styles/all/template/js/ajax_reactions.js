/**
 * Topic/Post Reactions. An extension for the phpBB 3.3.5 Forum Software package.
 * @author Steve <https://www.stevenclark.eu/phpBB3/>
 */
 
var $reactions = {};
 
(($) => {

'use strict';

var load_reactions = null,
	responseData = null,
    phpBBerrorHandler = null,
    $loadingIndicator,//
    $dark = $('#darkenwrapper');

const $time = 3000;
const $fadeTime = 500;

var $select = {
	reactions: $('ul[id^=ltpr-]'),
	dropDown: $("#tpr-dropdown"),
	smile: $('.button > .fa-smile-o'),//
	thank: $('button[id^=thank-button]'),
	remove: $('button[id^=delete-button]'),
	thankI : $('[id^=thank-icon]'),
	removeI: $('[id^=thank-remove-icon]')
};

$.extend($reactions, {
	phpBBerrorHandler: (jqXHR, textStatus, errorThrown) => {
	    /**
	    * Handler for AJAX errors/
		* stolen start
	    */

	    if (typeof console !== 'undefined' && console.log) {
	        console.log('AJAX error. status: ' + textStatus + ', message: ' + errorThrown);
	    }

	    phpbb.clearLoadingTimeout();//

	    var responseText, errorText = false;
	    try {
	        responseText = JSON.parse(jqXHR.responseText);
	        responseText = responseText.message;
	    } catch (e) {}
	    if (typeof responseText === 'string' && responseText.length > 0) {
	        errorText = responseText;
	    } else if (typeof errorThrown === 'string' && errorThrown.length > 0) {
	        errorText = errorThrown;
	    } else {
	        errorText = $dark.attr('data-ajax-error-text-' + textStatus);
	        if (typeof errorText !== 'string' || !errorText.length) {
	            errorText = $dark.attr('data-ajax-error-text');
	        }
	    }
		if (typeof phpbb.alert === "function") {
	    	phpbb.alert($dark.attr('data-ajax-error-title'), errorText);
	    } else {
	    	alert($dark.attr('data-ajax-error-title'), errorText)
	    }
	    /**
		* stolen end
	    */
	},
	imgSrc: (value, postId) => {
		var imgSrc = $("<img />").attr({
			id: 'rimage' + value.id + postId,
			src: tprData.url + value.src,
			height: tprData.height,
			width: tprData.width,
			class: "reaction_image",
			alt: tprData.alt
		});

		imgSrc.appendTo("#reaction-types" + postId);
	},
	count_type: (valueCount, postId) => {
		var badge = !tprData.badgeEnabled ? "" : "reaction-ear-color";
		var count = !tprData.countEnabled ? '' : "<strong class='reaction-ear " + badge + "'>" + valueCount + "</strong>";

		$("#reaction-types" + postId).append(count).fadeIn($fadeTime);
	},
	viewUrl: (viewUrl, value, changeClass, postId) => {
		var url = '<a href="' + viewUrl + '?reaction=' + value.id + '" class="' + changeClass + '" onclick="reactions(this.href);return false;" title="' + tprData.urlTitle + '"></a>';
		$("#rimage" + value.id + postId).wrap(url);
	},
	before: () => {
		if (!tprData.thanksEnabled) {
			$select.reactions.parent().css("visibility", "hidden");//prop
			$select.smile.addClass('fa-spin icon-red');
		} else {
			$select.thankI.removeClass('fa-thumbs-up').addClass('fa-spinner fa-spin icon-red');
			$select.removeI.removeClass('fa-thumbs-down').addClass('fa-spinner fa-spin icon-red');
			$select.thank.prop('disabled', true);
			$select.remove.prop('disabled', true);
		}
	},
	load_reactions: (responseData, action_url) => {

		action_url = action_url.replace('&amp;', '&');

	    $.ajax({
	        url: action_url,
	        type: 'GET',
	        dataType: "json",
	        beforeSend: $reactions.before,
	        success: responseData,
			error: $reactions.phpBBerrorHandler,
			cache: false
	    }).always(() => {
			setTimeout(() => {
				if (!tprData.thanksEnabled) {
					$select.smile.removeClass('fa-spin icon-red');
					$select.reactions.parent().css("visibility", "visible");//prop
					$select.dropDown.click();
				} else {
					$select.thankI.removeClass('fa-spinner fa-spin icon-red').addClass('fa-thumbs-up');
					$select.removeI.removeClass('fa-spinner fa-spin icon-red').addClass('fa-thumbs-down icon-red');
					$select.thank.prop('disabled', false);
					$select.remove.prop('disabled', false);
				}
			}, $time);
	    });

	    return this;
	}
});

$("[data-add-reaction]").bind("click", function(e) {
    e.preventDefault();
   
	var href_data = $(this).attr('data-add-reaction');
	if (typeof href_data === 'undefined') {
		return false;
	}

    var responseData = (res) => {
	if (typeof res.success === 'undefined') {
		return false;
	}

	var typesData = JSON.parse(res.TYPE_DATA),
		postId = res.POST_ID,
		userReactionCount = Number($("#user-reaction-count" + res.POST_ID).html()) + 1;

		$("#reaction-types" + postId).fadeOut($fadeTime).empty();

		$.each(typesData, (index, value) => {
			$reactions.count_type(value.count, postId);
			$reactions.imgSrc(value, postId);

			var changeClass = res.NEW_TYPE == value.id ? "user_alert" : "user_alert_new";
		 	if (res.VIEW_URL) {
				$reactions.viewUrl(res.VIEW_URL, value, changeClass, postId);
			}
		});

		if (res.REACTION_DELETE) {
			$('#thank-button' + postId).hide();
			$('#delete-button' + postId).attr('href', res.REACTION_DELETE).show();
		}

		if (!res.updated) {
			$("#reaction-count" + postId).html(parseInt(res.REACTIONS));
			$("#user-reaction-count" + postId).html(parseInt(userReactionCount));
		}
    };
	
   	return $reactions.load_reactions(responseData, $(this).attr('href'));
});

$("[data-delete-reaction]").bind("click", function(e) {
    e.preventDefault();
   
	var href_data = $(this).attr('data-delete-reaction');
	if (typeof href_data === 'undefined') {
		return false;
	}

    var responseData = (res) => {
	if (typeof res.success === 'undefined') {
		return false;
	}
	var typesData = JSON.parse(res.TYPE_DATA),
		postId = res.POST_ID,
		userReactionCount = Number($("#user-reaction-count" + res.POST_ID).html()) - 1;

		$("#reaction-count" + postId).html(parseInt(res.REACTIONS));
		$("#user-reaction-count" + postId).html(parseInt(userReactionCount));

		$('#delete-button' + postId).hide();
		$('#thank-button' + postId).show();

		if (typeof typesData === 'undefined') {
			$("#reaction-types" + postId).fadeOut($fadeTime).empty();
		} else {
			$("#reaction-types" + postId).fadeOut($fadeTime).empty();

			$.each(typesData, function(index, value) {
				$reactions.count_type(value.count, postId);
				$reactions.imgSrc(value, postId);

				var changeClass = "user_alert_new";
			 	if (res.VIEW_URL) {
					$reactions.viewUrl(res.VIEW_URL, value, changeClass, postId);
				}
			});
		}
    };

    return $reactions.load_reactions(responseData, $(this).attr('href'));
});

if (typeof tprData !== 'undefined') {
	$(() => {
		if (tprData.quickReply !== '') {
			var $qrForm = $('form#qr_postform');

			$qrForm.find('input[type=submit][name=post]').click(() => {

			var message = $('textarea', '#message-box').val().trim().length;
				if (!message) {
					if (typeof phpbb.alert === "function") {
						phpbb.alert(tprData.alertTitle, tprData.alertMsg);
						phpbb.closeDarkenWrapper($time);
					} else {
						alert(tprData.alertTitle, tprData.alertMsg);
					}
					return false;
				} else {
					$qrForm.attr('action', (i, val) => {
						return val + '&' + tprData.quickReply;
					});
				}
			});
		};
	});
}

$(() => {
	$('#reactions_memberlist').toggle('slow');
});

//stolen & we don't like it ...
if (typeof phpbb.addAjaxCallback === "function") {
	phpbb.addAjaxCallback('activate_deactivate_all', function(res) {
		var $this = $(this),
			newHref = $this.attr('href');

		$this.text(res.text);

		if (newHref.indexOf('deactivate_all') !== -1) {
			newHref = newHref.replace('deactivate_all', 'activate_all');
		} else {
			newHref = newHref.replace('activate_all', 'deactivate_all');
		}
		$('.activate_deactivate').text(res.td_text);
		$this.attr('href', newHref);
	});
};

})(jQuery);
