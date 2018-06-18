// @flow
import type { Action } from '../types';
import type { Cards } from '../types/cards';

export default (
	state: Cards = [],
	action: Action
): Cards => {
	/**
	 * Конечный список контролов
	 * @CREATE_VIEW - Создает конечный список контролов
	 * */
	switch (action.type) {
		case 'CREATE_VIEW': {
			return [...action.payload];
		}
		default:
			return state;
	}
}
