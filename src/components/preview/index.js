import React, {PureComponent} from 'react';
import {DragDropContext} from 'react-dnd';
import HTML5Backend from 'react-dnd-html5-backend';
import CardInputDrag from '../control-input-drag';
import CardSelectDrag from '../control-select-drag';
import {compose} from 'redux';
import {connect} from "react-redux";
import {changeOrderCards} from "../../actions";
import SubmitForm from '../submit-form/';
import {Iterable, Map, List} from 'immutable'

import toPairs from 'lodash.topairs';

// import toJS from 'to-js';
// import {toJs} from 'immutable';


const toJS = WrappedComponent => wrappedComponentProps => {
	//Мехнизм, следующий:
	//Сначала из стейта прилитает Immutable стейт
	//мы достаем из него то что нужно и прокидываем в компонент,
	//который пробрасывает пропсы через toJS, которая преобразует иттерируемые св-ва на 1ом уровне из Immutable в обычный js
	const KEY = 0;
	const VALUE = 1;
	//toPairs - превращает объекты типа {a:1,b:2} в массив [['a', 1], ['b', 2]]
	const propsJS = toPairs(
		wrappedComponentProps
	).reduce((newProps, wrappedComponentProp) => {
		//isIterable - находит данные типа List([]) и Map({}) выплевает true, а потом toJS() приводит их к [] и {}
		//Но работает это только на 1ом уровне вложенности
		newProps[wrappedComponentProp[KEY]] = Iterable.isIterable(
			wrappedComponentProp[VALUE]
		)
			? wrappedComponentProp[VALUE].toJS()
			: wrappedComponentProp[VALUE];
		return newProps
	}, {});
	return <WrappedComponent {...propsJS} />
};


class Container extends PureComponent {
	render() {
		const {preview} = this.props;
		console.log(preview, 'preview');
		return (
			<div className="preview">
				{preview.length ?
					<div style={{margin: 30, color: "#0f0"}}>Вы можете перетаскивать элементы формы</div> : ""}
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
				{preview.size ? <SubmitForm/> : ""}
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
		(state) => {
			console.log(1);
			return {
				preview: state.get('preview'),
				cards: state.get('cards'),
			}
		},
		dispatch => ({
			changeOrderCards: value => dispatch(changeOrderCards(value)),
		}),
	)
)(toJS(Container));
