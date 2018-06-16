import React from 'react';
import {compose} from 'redux';
import {connect} from "react-redux";
import {updateCard} from "../../actions";
import {Redirect} from "react-router-dom";

/**
 * Конечное представление настроенной формы
 * */

function ViewForm({view}) {
	if (!view.length) return <Redirect to="/" />;
	return <div className="form">{view.map(({type, title, required, list}, i) => {
		switch (type) {
		case 'input': {
			return <div className="preview__item--without-hover" key={i}>
				<label className="preview__label">
					{title}: <br/>
					<input placeholder="Введите имя поля" className="preview__label-input" value="" required={required} type="text" onChange={e => this.props.updateCard({id: i, title: e.target.value})} />
				</label>
			</div>
		}
		case 'select': {
			return <div className="preview__item--without-hover" key={i}>
				{title}: <br/><br/>
				<select required={required}>
					{list.map(text => {
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
	connect(({view}) => ({view}),
		dispatch => ({
			updateCard: value => dispatch(updateCard(value)),
		})
	)
)(ViewForm);
