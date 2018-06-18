//@flow
import React from 'react';
import Controls from '../controls/index';
import Preview from '../preview/index';
import {DragDropContext} from "react-dnd/lib/index";
import {createCard, updateOrderCards, createView, updateCard} from "../../actions/index";
import {connect} from "react-redux";
import {compose} from "redux";
import HTML5Backend from "react-dnd-html5-backend/lib/index";
import './index.css'
import type { Action, Dispatch } from '../../types';
import type { Card, Cards, PreviewType, UpdateOrderCard, UpdateCard } from '../../types/cards';


/**
 * Обертка необходимая для аггрегирования контейнеров:
 * 1. Список контролов который пользователь может добавить
 * 2. Представление и настройка добавленных контролов
 * Так же обертка соеденина с redux откуда пробрасывает полученные экшены и стейт
 * */

function FactoryForm({updateOrderCards, updateCard, createView, preview, createCard}: {
	updateOrderCards: UpdateOrderCard => Action,
	updateCard: UpdateCard => Action,
	createView: Cards => Action,
	preview: Cards,
	createCard: Card => Action,
}) {
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
		({preview}: PreviewType) => ({preview}),
		(dispatch: Dispatch) => ({
			updateOrderCards: value => dispatch(updateOrderCards(value)),
			updateCard: value => dispatch(updateCard(value)),
			createView: value => dispatch(createView(value)),
			createCard: value => dispatch(createCard(value)),
		}),
	)
)(FactoryForm);






