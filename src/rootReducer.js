import {combineReducers} from 'redux';

export default combineReducers({
	preview: (state = {}, {payload, type}) => {
		switch (type) {
		case 'UPDATE_PREVIEW_CARD': {
			let {id, title, required} = payload;
			debugger
			if (title === undefined) {
				title = state[id].title;
			}
			if (required === undefined) {
				required = state[id].required;
			}
			state[id] = {
				...state[id],
				title,
				required,
			};
			return [...state];
		}
		case 'ADD_CARD': {
			let title, required;
			if (payload.title === undefined) {
				title = state[payload.id].title;
			} else {
				title = payload.title;
			}
			if (payload.required === undefined) {
				required = state[payload.id].required;
			} else {
				required = payload.required;
			}
			state[payload.id] = {
				...state[payload.id],
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