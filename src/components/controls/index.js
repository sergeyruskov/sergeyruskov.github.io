import React, {PureComponent} from 'react';
import CardInput from '../control-input';

export default class Container extends PureComponent {

	controls = [{
		title: '',
		type: 'input',
		required: false,
		text: 'Добавить input',
	},
		{
		title: '',
		type: 'select',
		required: false,
		list: [],
		text: 'Добавить select',
	}];

	render() {
		return (
			<ul className="controls-add">
				{this.controls.map((card, i) => {
					const {type, text} = card;
					return <CardInput
						type='input'
						id={i}
						card={card}
						key={type}
						text={text}
					/>
				})}
			</ul>
		)
	}
}
