import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Screen from './Screen'

export default class CinemaApp extends Component {
  constructor(props) {
    super(props);
    this.state = {
      selects: Array(5).fill(null),
    };
  }

  handleClick(i) {
    const selects = this.state.selects.slice();
    selects.unshift(i);
    this.setState({selects: selects});
  }

  render() {
      return (
        <div className="reservation">
          <div>座席の指定</div>
            <Screen 
              onClick={(i) => this.handleClick(i)}
            />
          <div>選択中の座席</div>
            <Selects 
              number={this.state.selects}
            />
        </div>
        );
    }
}

class Selects extends Component {
  render() {
    return (
      <div  className="board-row">
        <button className="seat">{this.props.number[0]}</button>
        <button className="seat">{this.props.number[1]}</button>
        <button className="seat">{this.props.number[2]}</button>
        <button className="seat">{this.props.number[3]}</button>
        <button className="seat">{this.props.number[4]}</button>
      </div>
    );
  }
}

if (document.getElementById('cinemaApp')) {
  ReactDOM.render(<CinemaApp />, document.getElementById('cinemaApp'));
}