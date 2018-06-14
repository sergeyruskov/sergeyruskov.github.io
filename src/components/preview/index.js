import React, {PureComponent} from 'react';
import {DragDropContext} from 'react-dnd';
import HTML5Backend from 'react-dnd-html5-backend';
import CardInputDrag from '../control-input-drag';
import CardSelectDrag from '../control-select-drag';
import { compose } from 'redux';
import {connect} from "react-redux";
import {changeOrderCards} from "../../actions";
import SubmitForm from '../submit-form/';
import { Iterable } from 'immutable'

// import toJS from 'to-js';
// import {toJs} from 'immutable';



const toJS = WrappedComponent => wrappedComponentProps => {
	const KEY = 0;
	const VALUE = 1
  const propsJS = Object.entries(
	  wrappedComponentProps
  ).reduce((newProps, wrappedComponentProp) => {
	  newProps[wrappedComponentProp[KEY]] = Iterable.isIterable(
		  wrappedComponentProp[VALUE]
	  )
		  ? wrappedComponentProp[VALUE].toJS()
		  : wrappedComponentProp[VALUE]
	  return newProps
  }, {});
	return <WrappedComponent {...propsJS} />
};


class Container extends PureComponent {
	render() {
		const {preview} = this.props;
		console.log(this.props);
		return (
			<div className="preview">
				{preview.size ? <div style={{margin: 30, color: "#0f0"}}>Вы можете перетаскивать элементы формы</div> : ""}
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
				{preview.size ? <SubmitForm /> : ""}
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
		(state) => ({
			preview: state.get('preview')
		}),
		dispatch => ({
			changeOrderCards: value => dispatch(changeOrderCards(value)),
		}),
	)
)(toJS(Container));
