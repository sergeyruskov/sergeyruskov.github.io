import {combineReducers} from 'redux';
import forOwn from 'lodash.forown';

export default combineReducers({
	/**
	 * @preview - список контролов который пользователь составил для предварительного просмотра и настройки формы
	 * @CREATE_CARD - Добавляет контрол в превью
	 * @UPDATE_CARD - Изменяет/добавляет данные/настраивает контрол будущей формы
	 * @UPDATE_ORDER_CARDS - Изменяет порядок расположения превью контролов
	 * */
	preview: (state = {}, {payload, type}) => {
		switch (type) {
		case 'CREATE_CARD':
			return [...state, {...payload, key: Math.random()}];
		case 'UPDATE_CARD': {
			const {id} = payload;
			const newData = {};

			forOwn(payload, (value, key) => {
				newData[key] = value;
			});

			state[id] = {
				...state[id],
				...newData,
			};
			return [...state];
		}
		case 'UPDATE_ORDER_CARDS':
			const {dragIndex, hoverIndex} = payload;
			const swap = (theArray, indexA, indexB) => {
				const copyArray = theArray.slice();
				const temp = copyArray[indexA];
				copyArray[indexA] = copyArray[indexB];
				copyArray[indexB] = temp;
				return copyArray;
			};
			return swap(state, dragIndex, hoverIndex);
		default:
			return state
		}
	},
	/**
	 * Конечный список контролов
	 * @CREATE_VIEW - Создает конечный список контролов
	 * */
	view: (state = {}, {payload, type}) => {
		switch (type) {
		case 'CREATE_VIEW': {
			return [...payload];
		}
		default:
			return state;
		}
	},
});