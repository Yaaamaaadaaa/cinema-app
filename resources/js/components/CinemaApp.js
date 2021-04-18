import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Screen from './Screen'

export default class CinemaApp extends Component {
  render() {
      return (
        <div className="reservation">
          <div>座席の指定</div>
            <Screen />
        </div>
        );
    }
}

if (document.getElementById('cinemaApp')) {
  ReactDOM.render(<CinemaApp />, document.getElementById('cinemaApp'));
}