$.fn.subscribe = function (opt) {

	if (typeof opt !== "object") opt = {};

	opt = $.extend({
		submit: '#subscribe-block__submit',
		inputEmail: '#subscribe-block__input-email',
		wrapperInputEmail: '#subscribe-block__wrapper-input-email',
		normalStateWrapperInput: `subscribe-block__wrapper-input-email--state-normal`,
		errorStateWrapperInput: `subscribe-block__wrapper-input-email--state-error`,
		successStateWrapperInput: `subscribe-block__wrapper-input-email--state-success`,
		normalStateInput: `subscribe-block__input-email--state-normal`,
		errorStateInput: `subscribe-block__input-email--state-error`,
		successStateInput: `subscribe-block__input-email--state-success`,
		submitClassInactive: `btn--additional-brand--inactive`,
		normalMsg: `Введите ваш e-mail`,
		successMsgPhone: `Спасибо`,
		successMsgBigDevices: `Спасибо. Ваш email добавлен`,
		submitText: `Подписаться`,
		submitTextPhone: `Ок`
	}, opt);

	const $self = $(this),
			$submit = $(opt.submit, $self),
			$inputEmail = $(opt.inputEmail, $self),
			$wrapperInputEmail = $(opt.wrapperInputEmail, $self);

	let validateStateEmail = false;

	deviceLogic(
			[
				{
					logic: () => {
						"use strict";
						$submit.val(opt.submitTextPhone);
					},

					desiredDevice: `phone`
				},

				{
					logic: () => {
						"use strict";
						$submit.val(opt.submitText);
					},

					desiredDevice: `desktop laptop tablet`
				}
			]

	);

	function validate() {
		"use strict";
		const email = $.trim($inputEmail.val()).toLowerCase();
		validateStateEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
	}

	function normalState() {
		"use strict";
		$wrapperInputEmail
				.removeClass(`${opt.errorStateWrapperInput} ${opt.successStateWrapperInput}`)
				.addClass(`${opt.normalStateWrapperInput}`);
		$inputEmail
				.removeClass(`${opt.errorStateInput} ${opt.successStateInput}`)
				.addClass(`${opt.normalStateInput}`);
	}

	function successState() {
		"use strict";
		$wrapperInputEmail
				.removeClass(`${opt.errorStateWrapperInput} ${opt.normalStateWrapperInput}`)
				.addClass(`${opt.successStateWrapperInput}`);
		$inputEmail
				.removeClass(`${opt.errorStateInput} ${opt.normalStateInput}`)
				.addClass(`${opt.successStateInput}`);
	}

	function errorState() {
		"use strict";
		$wrapperInputEmail
				.removeClass(`${opt.successStateWrapperInput} ${opt.normalStateWrapperInput}`)
				.addClass(`${opt.errorStateWrapperInput}`);
		$inputEmail
				.removeClass(`${opt.successStateInput} ${opt.normalStateInput}`)
				.addClass(`${opt.errorStateInput}`);
	}

	$inputEmail.on(`keyup`, () => {
		"use strict";
		validate();
		normalState();
		$submit.toggleClass(opt.submitClassInactive, !validateStateEmail);
	});

	$submit.on(`click`, (e) => {
		"use strict";
		e.preventDefault();
		validate();

		if (validateStateEmail) {
			successState();
			$inputEmail.val(``);

			deviceLogic(
					[
						{
							logic: () => {
								"use strict";
								$inputEmail
										.attr(`placeholder`, opt.successMsgPhone)
										.addClass(`subscribe-block__input-email--state-success-placeholder`)
							},

							desiredDevice: `phone`
						},

						{
							logic: () => {
								$inputEmail
										.attr(`placeholder`, opt.successMsgBigDevices)
										.addClass(`subscribe-block__input-email--state-success-placeholder`)
							},

							desiredDevice: `desktop laptop tablet`
						}
					],

					true
			);

			setTimeout(() => {
				"use strict";
				normalState();
				$inputEmail
						.attr(`placeholder`, opt.normalMsg)
						.removeClass(`subscribe-block__input-email--state-success-placeholder`)
			}, 3000);

			validateStateEmail = false;

		} else errorState();


	});
};