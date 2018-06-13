import React, {PureComponent} from 'react';
import PropTypes from 'prop-types';
import {
	DragSource,
	DropTarget,
} from 'react-dnd';
import { compose } from 'redux';
import {cardTarget,cardSource} from '../../tools';
import {connect} from "react-redux";
import {addCard, copyCard} from "../../actions";
import ViewCard from '../view-card'

class CardInputDrag extends PureComponent {
	static propTypes = {
		connectDragSource: PropTypes.func.isRequired,
		connectDropTarget: PropTypes.func.isRequired,
		isDragging: PropTypes.bool.isRequired,
		id: PropTypes.number.isRequired,
		index: PropTypes.number.isRequired,
		moveCard: PropTypes.func.isRequired,
		preview: PropTypes.array.isRequired,
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


	render() {
		const {
			isDragging,
			connectDragSource,
			connectDropTarget,
			preview,
			id,
		} = this.props;


		return (
			connectDragSource &&
			connectDropTarget &&
			connectDragSource(
				connectDropTarget(<div>
					<ViewCard id={id} card={preview[id]} opacity={isDragging ? 0 : 1} />
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
)(CardInputDrag);
