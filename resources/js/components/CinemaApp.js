import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class CinemaApp extends Component {
    render() {
        return (
            <div>CinemaApp</div>
        );
    }
}
if (document.getElementById('cinemaApp')) {
  ReactDOM.render(<CinemaApp />, document.getElementById('cinemaApp'));
}