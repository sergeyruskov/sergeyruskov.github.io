//@flow
import React from 'react';
import type {Card, UpdateCard} from "../../types/cards";
import type {Action} from "../../types/index";

/**
 * Предпросмотр и настройка добавленного пользователем контрола Input
 **/

export default function PreviewInput({updateCard, card, id}: {
	updateCard: UpdateCard => Action,
	card: Card,
	id: number
}) {
	const {title, required} = card;

	return <div className="preview__item--without-hover">

		<label className="preview__label">

			Имя поля: <br/>
			<input placeholder="Введите имя поля" className="preview__label-input" value={title} required={required} type="text" onChange={(e) => updateCard({id, 'title': e.target.value})} />

		</label>

		<label className="preview__label">

			Обязательное поле:
			<input
				type="checkbox"
				checked={required}
				onChange={(e) => updateCard({id, 'required': e.target.checked})}
			/>

		</label>

	</div>
}
