import React from 'react';
import Controls from '../controls/';
import Preview from '../preview/';
import {DragDropContext} from "react-dnd/lib/index";
import {updateOrderCards, createView, updateCard, createCard} from "../../actions";
import {connect} from "react-redux";
import {compose} from "redux";
import HTML5Backend from "react-dnd-html5-backend/lib/index";
import './index.css'

/**
 * Обертка необходимая для аггрегирования контейнеров:
 * 1. Список контролов который пользователь может добавить
 * 2. Представление и настройка добавленных контролов
 * Так же обертка соеденина с redux откуда пробрасывает полученные экшены и стейт
 * */

function FactoryForm({updateOrderCards, updateCard, createView, preview, createCard}) {
	const previewProps = {updateOrderCards, updateCard, createView, preview};
	const controlProps = {createCard};

	return (<div className="form">
		<Controls {...controlProps} />
		{preview.length ? <Preview {...previewProps} /> : ""}
	</div>)
}

export default compose(
	DragDropContext(HTML5Backend),
	connect(
		({preview}) => ({preview}),
		dispatch => ({
			updateOrderCards: value => dispatch(updateOrderCards(value)),
			updateCard: value => dispatch(updateCard(value)),
			createView: value => dispatch(createView(value)),
			createCard: value => dispatch(createCard(value)),
		}),
	)
)(FactoryForm);






