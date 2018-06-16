import React, {PureComponent} from 'react';
import cn from "classnames";

/**
 * Предпросмотр и настройка добавленного пользователем контрола Select
 **/

export default class PreviewSelect extends PureComponent {

	state = {
		option: ''
	};

	writeChanges = (e) => {
		/**
		 * Если пользователь решил ввести новые данные
		 * после ошибки, ее следует обнулить.
		 * */
		this.state.error && this.setState({error: false});
		this.setState({option: e.target.value});
	};


	/**
	 * Метод нужен для отправки введеных значений в список select
	 * Проводим проверку нажата ли кнопка Enter и не отправленна ли пустая строка
	 *
	 * Проводим проверку существует ли это значение уже в списке
	 * Если да - то записываем ошибку в стейт
	 * Если нет - добавляем значение в стейт и обновляем поле ввода
	 * @key - нажатая кнопка
	 * @target - элемент с которым совершается манипуляция
	 * */
	submitToSelect = ({key, target}) => {
		if (key === 'Enter' && target.value) {
			const {id, card} = this.props;

			if (~card.list.indexOf(this.state.option)) {
				this.setState({error: true});
			} else {
				this.props.updateCard({
					id,
					list: [...card.list, this.state.option],
				});
				this.setState({option: ''})
			}

		}
	};

	render() {
		const {
			card,
			id,
			updateCard,
		} = this.props;

		return <div className="preview__item--without-hover">

			<label className="preview__label">

				Имя поля: <br/>
				<input placeholder="Введите имя поля" className="preview__label-input" value={card.title} required={card.required} type="text" onChange={(e) => {
					updateCard({id, 'title': e.target.value})}} />

			</label>

			<label className="preview__label">

				Добавить уникальный вариант в список:
				<input placeholder="Нажмите enter для ввода" onKeyPress={this.submitToSelect} className={cn("preview__label-input", {"preview__label-input--error": this.state.error})} type="text" value={this.state.option} onChange={this.writeChanges}/>

			</label>

			<label className="preview__label">

				Обязательное поле:
				<input
					type="checkbox"
					checked={card.required}
					onChange={(e) => {
						updateCard({id, 'required': e.target.checked})
					}}
				/>

			</label>

			<label className="preview__label">

				Список:
				<select className="preview__label-select" required={card.required}>
					{card.list.map(text => {
						return <option key={text}>{text}</option>
					})}
				</select>

			</label>

		</div>
	}
}
