import {combineReducers} from 'redux';

export default combineReducers({
	preview: (state = {}, {payload, type}) => {
		switch (type) {
		case 'UPDATE_CARD': {
			let {title, required, id} = payload;
			let somethingChanged = false;
			if (title !== undefined) {
				state[id] = {
					...state[id],
					title,
				};
				somethingChanged = true;
			}

			if (required !== undefined) {
				state[id] = {
					...state[id],
					required,
				};
				somethingChanged = true;
			}
			return somethingChanged ? [...state]: state;
		}
		case 'ADD_CARD':
			return [...state, {...payload, key: Math.random()}];
		case 'CHANGE_ORDER_CARDS':
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
	view: (state = {}, {payload, type}) => {
		switch (type) {
		case 'SEND_FORM': {
			return [...payload];
		}
		default:
			return state;
		}
	},
});