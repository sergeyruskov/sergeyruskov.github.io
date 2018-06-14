// import {combineReducers} from 'redux';
import { combineReducers } from 'redux-immutable';
import { List, Map } from 'immutable';

export default combineReducers({
	preview: (state = List([]), {payload, type}) => {
		switch (type) {
		case 'ADD_CARD': {
			// let {title, required, id} = payload;
			// const card = state[id];
			// if (title === undefined) {
			// 	title = card.title;
			// }
			//
			// if (required === undefined) {
			// 	required = card.required;
			// }

			// state[id] = {
			// 	...card,
			// 	title,
			// 	required,
			// };

			// List.get('name');


			// list.update(
			// 	list.findIndex(function(item) {
			// 		return item.get("name") === "third";
			// 	}), function(item) {
			// 		return item.set("count", 4);
			// 	}
			// )

			return state;
			// return [...state];
		}
		case 'COPY_CARD':
			console.log(state,222);
			return state;
			return state.merge({...payload, key: Math.random()});
			// state.merge(state[id]);
			// return [...state, {...payload, key: Math.random()}];
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