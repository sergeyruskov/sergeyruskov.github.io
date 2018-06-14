import React, {PureComponent} from 'react';
import {updateCard} from "../../actions";
import {connect} from "react-redux";
import {compose} from "redux";

class ViewCard extends PureComponent {

	updateCard = ({e, key}) => {
		const {id} = this.props;
		let value;
		switch(key) {
		case 'required': {
			value = e.target.checked;
			break;
		}
		case 'title': {
			value = e.target.value;
			break;
		}
		default : {
			value = 'Ошибка'
		}
		}
		this.props.updateCard({
			id,
			[key]: value,
		})
	};


	render() {
		const {
			isDragging,
			card,
		} = this.props;
		const {title, required} = card;

		const opacity = isDragging ? 0 : 1;

		return <div className="controls-add__item--without-hover" style={{ opacity }}>
			<label className="controls-add__label">
				Имя поля: <br/>
				<input placeholder="Введите имя поля" className="controls-add__label-input" value={title} required={required} type="text" onChange={(e) => this.updateCard({e, key: 'title'})} />
			</label>
			<label className="controls-add__label">
				Обязательное поле:
				<input
					type="checkbox"
					checked={required}
					onChange={(e) => this.updateCard({e, key: 'required'})}
				/>
			</label>
		</div>
	}
}

export default compose(
	connect(({cards}) => ({cards}), dispatch => ({
		updateCard: value => dispatch(updateCard(value)),
	}))
)(ViewCard);
