import React, {PureComponent} from 'react';
import PropTypes from 'prop-types';
import { compose } from 'redux';
import {connect} from "react-redux";
import {addCard, copyCard} from "../../actions";


class CardInput extends PureComponent {
	static propTypes = {
		card: PropTypes.object.isRequired,
		id: PropTypes.number.isRequired,
		addCard: PropTypes.func.isRequired,
		copyCard: PropTypes.func.isRequired,
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

	submit = () => {
		const {copyCard, card} = this.props;
		copyCard(card);
	};

	render() {
		const {text} = this.props;
		return <li className="controls-add__item" onClick={this.submit}>
			{text}
		</li>
	}
}

export default compose(
	connect(() => ({}), dispatch => ({
		addCard: value => dispatch(addCard(value)),
		copyCard: value => dispatch(copyCard(value)),
	}))
)(CardInput);
