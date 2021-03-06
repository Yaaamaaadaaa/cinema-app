import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Screen from './Screen'

export default class CinemaApp extends Component {
  constructor(props) {
    super(props);
    this.state = {
      selects: [],
    };
  }

  handleClick(i) {
    const selects = this.state.selects.slice();
    if (selects.some((element) => element === i)) {
      const index = selects.findIndex((element) => element === i);
      selects.splice(index, 1);
    } else if (selects.length >= 5) {
      return true;
    } else {
      selects.push(i);
    }
    this.setState({selects: selects});
  }

  resetSelects() {
    const selects = this.state.selects.slice();
    selects.splice(0);
    this.setState({selects: selects});
  }

  render() {
      return (
        <div className="reservation">
          <div>座席の指定</div>
          <Screen
            onClick={(i) => this.handleClick(i)}
            selects={this.state.selects}
          />
          <div>選択中の座席</div>
          <Selects
            number={this.state.selects}
          />
          <button onClick={() => this.resetSelects() }>リセット</button>
          <button>次へ</button>
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