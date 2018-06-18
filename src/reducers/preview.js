// @flow

import type {Cards} from '../types/cards';
import type {Action} from '../types';
import forOwn from "lodash.forown";

export default (state: Cards = [], action: Action): Cards => {
	switch (action.type) {
	case 'CREATE_CARD':
		return [...state, {...action.payload, key: Math.random()}];
	case 'UPDATE_CARD': {
		const {id} = action.payload;
		const newData = {};

		forOwn(action.payload, (value, key) => {
			newData[key] = value;
		});

		state[id] = {
			...state[id],
			...newData,
		};
		return [...state];
	}
	case 'UPDATE_ORDER_CARDS':
		const {dragIndex, hoverIndex} = action.payload;
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
};

