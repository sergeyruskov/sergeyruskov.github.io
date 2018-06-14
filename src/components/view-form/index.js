import React, {PureComponent} from 'react';
import {compose} from 'redux';
import {connect} from "react-redux";
import {updateCard} from "../../actions";



class ViewForm extends PureComponent {

	updateCard = ({e, key, id}) => {
		this.props.updateCard({
			id,
			[key]: e.target.value,
		})
	};


	render() {
		const {view} = this.props;

		return <div className="form">{view.map((card, i) => {
			const {type} = card;
			switch (type) {
			case 'input': {
				return <div className="controls-add__item--without-hover" key={i}>
					<label className="controls-add__label">
						{card.title}: <br/>
						<input placeholder="Введите имя поля" className="controls-add__label-input" value="" required={card.required} type="text" onChange={(e) => this.updateCard({e, key: 'title', id: i})} />
					</label>
				</div>
			}
			case 'select': {
				return <div className="controls-add__item--without-hover" key={i}>
					{card.title}: <br/><br/>
					<select required={card.required}>
						{card.list.map(text => {
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
}

export default compose(
	connect(({view}) => ({view}),
		dispatch => ({
			updateCard: value => dispatch(updateCard(value)),
		})
	)
)(ViewForm);
