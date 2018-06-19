//@flow
import React, {PureComponent} from 'react';

/**
 * Представление инпута и его заголовка
 * */

export default class ViewInput extends PureComponent <{
	title: string,
	required: boolean,
}, {inputValue: string}> {

	state = {
		inputValue: ''
	};

	render() {
		const {title, required} = this.props;
		return <div className="preview__item--without-hover">
			<label className="preview__label">
				{title}: <br/>
				<input placeholder="Введите имя поля" className="preview__label-input" value={this.state.inputValue} required={required} type="text" onChange={e => this.setState({inputValue: e.target.value})} />
			</label>
		</div>

	}
}
