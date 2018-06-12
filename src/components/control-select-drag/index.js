import React, {PureComponent} from 'react';
import PropTypes from 'prop-types';
import {
	DragSource,
	DropTarget,
} from 'react-dnd';
import {compose} from 'redux';
import {cardTarget, cardSource} from '../../tools';
import {connect} from "react-redux";
import cn from "classnames";
import {addCard, copyCard} from "../../actions";

class SelectCardDragView extends PureComponent {

	constructor(props) {
		super(props);
		this.state = {
			option: ''
		}
	}


	addOption = (e) => {
		this.setState({option: e.target.value});
		if (e.target.value === '' && this.state.error) {
			this.setState({error: false});
		}
	};

	addCard = ({e, key}) => {
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
		this.props.addCard({
			id,
			[key]: value,
		})
	};

	handleKeyPress = (event) => {
		if(event.key === 'Enter'){
			const {preview, id} = this.props;
			const card = preview[id];
			if (~card.list.indexOf(this.state.option)) {
				this.setState({error: true});
			} else {
				if (this.state.error) {
					this.setState({error: false});
				}
				card.list = [...card.list, this.state.option];
				this.props.addCard({
					id,
					list: [...card.list],
				});
				this.setState({option: ''})
			}
		} else {
			this.setState({error: false})
		}
	};

	render() {
		const {
			preview,
			id,
		} = this.props;

		const card = preview[id];
		return <div className="controls-add__item--without-hover">
			<label className="controls-add__label">
				Имя поля: <br/>
				<input placeholder="Введите имя поля" className="controls-add__label-input" value={card.title} required={card.required} type="text" onChange={(e) => this.addCard({e, key: 'title'})} />
			</label>
			<label className="controls-add__label">
				Добавить уникальный вариант в список:
				<input placeholder="Нажмите enter для ввода" onKeyPress={(e) => this.handleKeyPress(e)} className={cn("controls-add__label-input", {"controls-add__label-input--error": this.state.error})} type="text" value={this.state.option} onChange={this.addOption}/>
			</label>
			<label className="controls-add__label">
				Обязательное поле:
				<input
					type="checkbox"
					checked={card.required}
					onChange={(e) => this.addCard({e, key: 'required'})}
				/>
			</label>
			<label className="controls-add__label">
				Список:
				<select className="controls-add__label-select" required={card.required}>
					{card.list.map(text => {
						return <option key={text}>{text}</option>
					})}
				</select>
			</label>
		</div>
	}
}


class CardSelectDrag extends PureComponent {


	static propTypes = {
		connectDragSource: PropTypes.func.isRequired,
		connectDropTarget: PropTypes.func.isRequired,
		isDragging: PropTypes.bool.isRequired,
		id: PropTypes.number.isRequired,
		index: PropTypes.number.isRequired,
		moveCard: PropTypes.func.isRequired,
	};


	render() {
		const {
			isDragging,
			connectDragSource,
			connectDropTarget,
			preview,
			id,
			addCard,
			copyCard
		} = this.props;
		const opacity = isDragging ? 0 : 1;

		return (
			connectDragSource &&
			connectDropTarget &&
			connectDragSource(
				connectDropTarget(<div style={{opacity}}>
					<SelectCardDragView preview={preview} id={id} addCard={addCard} copyCard={copyCard}/>
				</div>),
			)
		)
	}
}

export default compose(
	DropTarget('card', cardTarget, (connect) => ({
		connectDropTarget: connect.dropTarget(),
	})),
	DragSource(
		'card',
		cardSource,
		(connect, monitor) => ({
			connectDragSource: connect.dragSource(),
			isDragging: monitor.isDragging(),
		}),
	),
	connect(({preview}) => ({preview}), dispatch => ({
		addCard: value => dispatch(addCard(value)),
		copyCard: value => dispatch(copyCard(value)),
	}))
)(CardSelectDrag);
