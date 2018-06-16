import { createStore } from 'redux';
import rootReducer from './rootReducer';
import initialState from './initialState';

export default function configureStore() {
	let LS;
	if (localStorage.ged) {
		/**
		 * Для возможности сохранять данные в локалсторадже для последующего повторного показа
		 * после перезагрузки страницы, необходимо расскоментировать.
		 * Так как пока не реализована возможность удаления контролов, эта опция будет лишней.
		 * */
		// LS = JSON.parse(localStorage.ged);
	}
	const store = createStore(
		rootReducer,
		LS || initialState,
	);
	store.subscribe(() => {
		localStorage.ged = JSON.stringify(store.getState());
	});
	return store;
}
