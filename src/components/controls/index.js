import React, {PureComponent} from 'react';
import CardInput from '../control-input';
import CardSelect from '../control-select';

export default class Container extends PureComponent {

	controls = [{
		title: '',
		type: 'input',
		required: false,
	},
		{
		title: '',
		type: 'select',
		required: false,
		list: [],
	}];

	render() {
		return (
			<ul className="controls-add">
				{this.controls.map((card, i) => {
					const {type} = card;
					switch (type) {
					case 'input': {
						return <CardInput
							type='input'
							id={i}
							card={card}
							key={type}
						/>
					}
					case 'select': {
						return <CardSelect
							type='select'
							id={i}
							card={card}
							key={type}
						/>
					}
					default: {
						return <span>Error</span>
					}
					}
				})}
			</ul>
		)
	}
}
