// @flow
import type { Card, Cards, UpdateCard, UpdateOrderCard } from '../types/cards';
import type { Action } from '../types/';

export const createCard = (payload: Card): Action => ({
	type: 'CREATE_CARD',
	payload,
});

export const updateCard = (payload: UpdateCard): Action => ({
	type: 'UPDATE_CARD',
	payload,
});

export const updateOrderCards = (payload: UpdateOrderCard): Action => ({
	type: 'UPDATE_ORDER_CARDS',
	payload,
});

export const createView = (payload: Cards): Action => ({
	type: 'CREATE_VIEW',
	payload,
});
