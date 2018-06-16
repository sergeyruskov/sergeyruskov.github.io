import React from 'react';
import controlsList from './controls-list'
import './index.css'

/**
 * Список контролов из которых пользователь может выбрать необходимый для добавления в превью
 * */

export default function Controls({createCard}) {

	function ControlItem({text, createCard, card}) {
		return <li className="controls-add__item" onClick={() => createCard(card)}>
			{text}
		</li>

	}

	return (
		<ul className="controls-add">
			{controlsList.map((card) => {
					const {type, text} = card;
					return <ControlItem
						createCard={createCard}
						card={card}
						text={text}
						key={type}
					/>
				}
			)}
		</ul>
	)
}
