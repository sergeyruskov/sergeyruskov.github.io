export const updateCard = payload => ({
	type: 'UPDATE_CARD',
	payload,
});

export const createCard = payload => ({
	type: 'CREATE_CARD',
	payload,
});

export const updateOrderCards = payload => ({
	type: 'UPDATE_ORDER_CARDS',
	payload,
});

export const createView = payload => ({
	type: 'CREATE_VIEW',
	payload,
});
