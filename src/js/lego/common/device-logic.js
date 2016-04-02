//deviceLogic(
//		[
//			{
//				logic: () => {
//					console.log(1);
//				},
//
//				desiredDevice: `phone`
//			},
//
//			{
//				logic: () => {
//					console.log(2);
//				},
//
//				desiredDevice: `desktop laptop tablet`
//			}
//		]
//);

window.deviceLogic = function (
		opt = {},
		//Сработает ли указанная логика 1 раз или будет срабатывать каждый раз при ресайзе, по умолчанию будет работать при каждом ресайзе
		oneTime = false,
		devices = [
			{
				min: 0,
				max: 658,
				name: `phone`
			},
			{
				min: 657,
				max: 978,
				name: `tablet`
			},
			{
				min: 977,
				max: 1297,
				name: `laptop`
			},
			{
				min: 1296,
				max: Number.MAX_VALUE,
				name: `desktop`
			}
		]
) {
	//Имя пользовательского устройства
	let currentDevice = ``;

	//Определяем пользовательское устройство
	function checkDevice() {
		"use strict";
		let devicesLength = devices.length;

		function checkWidth(opt) {
			"use strict";
			if (
					window.innerWidth > opt.min &&
					window.innerWidth < opt.max
			)
			{
				devicesLength = 0;
				currentDevice = opt.name;
			}
		}

		while (devicesLength) checkWidth(devices[--devicesLength]);
	}

	//Запускаем указаную разработчиком логику, если указанный им девайс совпал с пользовательским
	function _deviceLogic(opt) {
		if (
				typeof opt.desiredDevice === `undefined` ||
				typeof opt.logic === `undefined`
		) return;

		const devices = opt.desiredDevice.split(` `);
		let deviceLength = devices.length;

		while(deviceLength) if (currentDevice === devices[--deviceLength]) opt.logic();
	}

	if (!oneTime) {

		$(window).on(`resize`, () => {
			"use strict";

			checkDevice();

			//Парсим указанные разработчиком данные для запуска пользовательской логики
			for (let logicAndDeviceName in opt) {

				if (opt.hasOwnProperty(logicAndDeviceName)) {

					_deviceLogic({
						desiredDevice: opt[logicAndDeviceName].desiredDevice,
						logic: opt[logicAndDeviceName].logic
					});

				}

			}

		}).trigger(`resize`);

	} else {

		checkDevice();

		//Парсим указанные разработчиком данные для запуска пользовательской логики
		for (let logicAndDeviceName in opt) {

			if (opt.hasOwnProperty(logicAndDeviceName)) {

				_deviceLogic({
					desiredDevice: opt[logicAndDeviceName].desiredDevice,
					logic: opt[logicAndDeviceName].logic
				});

			}

		}

	}

}