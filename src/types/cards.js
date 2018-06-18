// @flow

type Id = number;
type Text = string;
type Title = string;
type Required = boolean;
type List = Array<string>;

export type IsDragging = number;

export type Card = {
	type: string,
	title: Title,
	text: Text,
	required: Required,
	list?: List,
	key: number,
}

export type UpdateCard = {
	id: Id,
	title?: Title,
	text?: Text,
	required?: Required,
	list?: List,
};

export type UpdateOrderCard = {
	dragIndex: number,
	hoverIndex: number,
};

export type Cards = Array<Card>;

export type PreviewType = {
  preview: Cards
};

export type ViewType = {
  view: Cards
};

export type ActionList =
  | { type: 'CREATE_CARD', payload: Card}
  | { type: 'UPDATE_CARD', payload: UpdateCard}
  | { type: 'UPDATE_ORDER_CARDS', payload: UpdateOrderCard}
  | { type: 'CREATE_VIEW', payload: Cards};
