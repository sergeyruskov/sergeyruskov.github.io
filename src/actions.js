export const updateCard = value => ({
	type: 'ADD_CARD',
	payload: value
});

export const copyCard = value => ({
	type: 'COPY_CARD',
	payload: value
});

export const changeOrderCards = value => ({
	type: 'CHANGE_ORDER_CARDS',
	payload: value
});

export const sendForm = value => ({
	type: 'SEND_FORM',
	payload: value
});
