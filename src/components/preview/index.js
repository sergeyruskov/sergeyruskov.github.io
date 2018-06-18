//@flow
import React from 'react';
import PreviewDrag from './preview-drag';
import PreviewInput from './preview-input'
import PreviewSelect from './preview-select'
import {Link} from "react-router-dom";
import './index.css'
import type {Cards, UpdateCard} from "../../types/cards";
import type {Action} from "../../types";
import type {UpdateOrderCard} from "../../types/cards";

export default function Preview(props: {
	updateOrderCards: UpdateOrderCard => Action,
	updateCard: UpdateCard => Action,
	createView: Cards => Action,
	preview: Cards,
}) {

	function list({preview}) {
		return preview.map((card, i) => {
			const {type, key} = card;

			const cardProps = {
				id: i,
				card,
				updateCard,
			};

			const dragProps = {
				key,
				index: i,
				moveCard: props.updateOrderCards,
			};

			switch (type) {
			case 'input': {
				return <PreviewDrag {...dragProps} render={
					({isDragging}) => {
						return <PreviewInput {...cardProps} opacity={isDragging ? 0 : 1}/>;
					}
				}/>;
			}
			case 'select': {
				return <PreviewDrag {...dragProps} render={
					({isDragging}) => {
						return <PreviewSelect {...cardProps} opacity={isDragging ? 0 : 1}/>;
					}
				}/>;
			}
			default: {
				return <div>Ошибка</div>;
			}
			}
		})
	}

	const {preview, updateCard, createView} = props;

	return <div className="preview">
		{<div className="preview__tooltip-title">Вы можете перетаскивать элементы формы</div>}
		{list({preview})}
		{<Link className="preview__submit" to="/view" onClick={() => createView(preview)}>Отправить</Link>}
	</div>;
}



