import React from 'react'

export default class Seat extends React.Component {
  render() {
    return (
      <button className="seat">
        {this.props.number}
      </button>
    );
  }
}