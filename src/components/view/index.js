//@flow
import React from 'react';
import {compose} from 'redux';
import {connect} from "react-redux";
import {Redirect} from "react-router-dom";
import ViewInput from './view-input';
import type { Cards } from '../../types/cards';

/**
 * Конечное представление настроенной формы
 * */

function ViewForm({view}: {
	view: Cards,
}) {
	if (!view.length) return <Redirect to="/" />;
	return <div className="form">{view.map(({type, title, required, list}, i) => {
		switch (type) {
		case 'input': {
			return <ViewInput title={title} required={required} key={i} />
		}
		case 'select': {
			return <div className="preview__item--without-hover" key={i}>
				{title}: <br/><br/>
				<select required={required}>
					{list && list.map(text => {
						return <option key={text}>{text}</option>
					})}
				</select>
			</div>
		}
		default: {
			return <span>Error</span>
		}
		}
	})}</div>

}

export default compose(
	connect(({view}: {view: Cards}) => ({view}))
)(ViewForm);
