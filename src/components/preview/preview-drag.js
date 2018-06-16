import React, {PureComponent} from 'react';
import {
	DragSource,
	DropTarget,
} from 'react-dnd';
import { compose } from 'redux';
import { findDOMNode } from 'react-dom'

/**
 * Техническая прослойка между контейнером и компонентами предсталвения
 * для реализации растановки контролов по порядку задуманному пользователем
 * путем drag and drop
 **/

const cardTarget = {
	hover(props, monitor, component) {
		const dragIndex = monitor.getItem().index;
		const hoverIndex = props.index;

		// Don't replace items with themselves
		if (dragIndex === hoverIndex) {
			return
		}

		// Determine rectangle on screen
		const hoverBoundingRect = (findDOMNode(
			component,
		)).getBoundingClientRect();

		// Get vertical middle
		const hoverMiddleY = (hoverBoundingRect.bottom - hoverBoundingRect.top) / 2;

		// Determine mouse position
		const clientOffset = monitor.getClientOffset();

		// Get pixels to the top
		const hoverClientY = (clientOffset).y - hoverBoundingRect.top;

		// Only perform the move when the mouse has crossed half of the items height
		// When dragging downwards, only move when the cursor is below 50%
		// When dragging upwards, only move when the cursor is above 50%

		// Dragging downwards
		if (dragIndex < hoverIndex && hoverClientY < hoverMiddleY) {
			return
		}

		// Dragging upwards
		if (dragIndex > hoverIndex && hoverClientY > hoverMiddleY) {
			return
		}

		// Time to actually perform the action
		props.moveCard({dragIndex, hoverIndex});

		// Note: we're mutating the monitor item here!
		// Generally it's better to avoid mutations,
		// but it's good here for the sake of performance
		// to avoid expensive index searches.
		monitor.getItem().index = hoverIndex;
	},
};



class CardDrag extends PureComponent {

	render() {
		const {isDragging, connectDragSource, connectDropTarget, render} = this.props;
		return (
			connectDragSource &&
			connectDropTarget &&
			connectDragSource(
				connectDropTarget(<div>
					{render({isDragging})}
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
		{beginDrag({id, index}) {
				return {
					id,
					index,
				}
			},
		},
		(connect, monitor) => ({
			connectDragSource: connect.dragSource(),
			isDragging: monitor.isDragging(),
		})),
)(CardDrag);
