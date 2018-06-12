import React, {PureComponent} from 'react';
import {DragDropContext} from 'react-dnd';
import HTML5Backend from 'react-dnd-html5-backend';
import CardInputDrag from '../control-input-drag';
import CardSelectDrag from '../control-select-drag';
import { compose } from 'redux';
import {connect} from "react-redux";
import {changeOrderCards} from "../../actions";
import SubmitForm from '../submit-form/';

class Container extends PureComponent {
	render() {
		const {preview} = this.props;

		return (
			<div className="preview">
				{preview.length ? <div style={{margin: 30, color: "#0f0"}}>Вы можете перетаскивать элементы формы</div> : ""}
				{preview.map((card, i) => {
					const {type, title, key} = card;
					switch (type) {
					case 'input': {
						return <CardInputDrag
							id={i}
							index={i}
							moveCard={this.moveCard}
							key={key}
							title={title}
						/>
					}
					default: {
						return <CardSelectDrag
							id={i}
							index={i}
							moveCard={this.moveCard}
							key={key}
							title={title}
						/>
					}
					}
				})}
				{preview.length ? <SubmitForm /> : ""}
			</div>
		)

	}

	moveCard = (dragIndex, hoverIndex) => {
		this.props.changeOrderCards({dragIndex, hoverIndex})
	}
}


export default compose(
	DragDropContext(HTML5Backend),
	connect(
		({preview}) => ({preview}),
		dispatch => ({
			changeOrderCards: value => dispatch(changeOrderCards(value)),
		}),
	)
)(Container);
