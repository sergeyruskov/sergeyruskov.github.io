import {combineReducers} from 'redux';

export default combineReducers({
	preview: (state = {}, {payload, type}) => {
		switch (type) {
		case 'ADD_CARD': {
			let {title, required, id} = payload;
			const card = state[id];
			if (title === undefined) {
				title = card.title;
			}

			if (required === undefined) {
				required = card.required;
			}

			state[id] = {
				...card,
				title,
				required,
			};
			return [...state];
		}
		case 'COPY_CARD':
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