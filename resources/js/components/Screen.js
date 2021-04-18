import React from 'react'
import Seat from './Seat'

export default class Screen extends React.Component {
    renderSeat(i) {
        return (
          <Seat
          number={i}
          />
        );
      }
    
    nullSeat() {
      return (
        <button className="null-seat"　disabled>
        </button>
      );
    }

    render() {
      
      const status = 'SCREEN2';

      return (
        <div>
          <div className="screen">{status}</div>
          <div style={{margin:'auto',width:'50%'}}>
            <div className="board-row">
              {this.nullSeat("A1")}
              {this.nullSeat("A2")}
              {this.renderSeat("A3")}
              {this.renderSeat("A4")}
              {this.renderSeat("A5")}
              {this.renderSeat("A6")}
              {this.renderSeat("A7")}
              {this.renderSeat("A8")}
              {this.renderSeat("A9")}
              {this.renderSeat("A10")}
              {this.renderSeat("A11")}
              {this.renderSeat("A12")}
              {this.renderSeat("A13")}
              {this.renderSeat("A14")}
              {this.renderSeat("A15")}
            </div>
            <div className="board-row">
              {this.nullSeat("A1")}
              {this.nullSeat("A2")}
              {this.renderSeat("A3")}
              {this.renderSeat("A4")}
              {this.renderSeat("A5")}
              {this.renderSeat("A6")}
              {this.renderSeat("A7")}
              {this.renderSeat("A8")}
              {this.renderSeat("A9")}
              {this.renderSeat("A10")}
              {this.renderSeat("A11")}
              {this.renderSeat("A12")}
              {this.renderSeat("A13")}
              {this.renderSeat("A14")}
              {this.renderSeat("A15")}
            </div>
            <div className="board-row">
              {this.nullSeat("A1")}
              {this.nullSeat("A2")}
              {this.renderSeat("A3")}
              {this.renderSeat("A4")}
              {this.renderSeat("A5")}
              {this.renderSeat("A6")}
              {this.renderSeat("A7")}
              {this.renderSeat("A8")}
              {this.renderSeat("A9")}
              {this.renderSeat("A10")}
              {this.renderSeat("A11")}
              {this.renderSeat("A12")}
              {this.renderSeat("A13")}
              {this.renderSeat("A14")}
              {this.renderSeat("A15")}
            </div>
            <div className="board-row">
              {this.nullSeat("A1")}
              {this.nullSeat("A2")}
              {this.nullSeat("A3")}
              {this.nullSeat("A4")}
              {this.renderSeat("A5")}
              {this.renderSeat("A6")}
              {this.renderSeat("A7")}
              {this.renderSeat("A8")}
              {this.renderSeat("A9")}
              {this.renderSeat("A10")}
              {this.renderSeat("A11")}
              {this.renderSeat("A12")}
              {this.renderSeat("A13")}
              {this.renderSeat("A14")}
              {this.renderSeat("A15")}
            </div>
            <div className="board-row">
              {this.nullSeat("A1")}
              {this.nullSeat("A2")}
              {this.nullSeat("A3")}
              {this.nullSeat("A4")}
              {this.renderSeat("A5")}
              {this.renderSeat("A6")}
              {this.renderSeat("A7")}
              {this.renderSeat("A8")}
              {this.renderSeat("A9")}
              {this.renderSeat("A10")}
              {this.renderSeat("A11")}
              {this.renderSeat("A12")}
              {this.renderSeat("A13")}
              {this.renderSeat("A14")}
              {this.renderSeat("A15")}
            </div>
            <div className="board-row">
              {this.nullSeat("A1")}
              {this.nullSeat("A2")}
              {this.nullSeat("A3")}
              {this.nullSeat("A4")}
              {this.renderSeat("A5")}
              {this.renderSeat("A6")}
              {this.renderSeat("A7")}
              {this.renderSeat("A8")}
              {this.renderSeat("A9")}
              {this.renderSeat("A10")}
              {this.renderSeat("A11")}
              {this.renderSeat("A12")}
              {this.renderSeat("A13")}
              {this.renderSeat("A14")}
              {this.renderSeat("A15")}
            </div>
            <div className="board-row">
              {this.nullSeat("A1")}
              {this.nullSeat("A2")}
              {this.nullSeat("A3")}
              {this.nullSeat("A4")}
              {this.renderSeat("A5")}
              {this.renderSeat("A6")}
              {this.renderSeat("A7")}
              {this.renderSeat("A8")}
              {this.renderSeat("A9")}
              {this.renderSeat("A10")}
              {this.renderSeat("A11")}
              {this.renderSeat("A12")}
              {this.renderSeat("A13")}
              {this.renderSeat("A14")}
              {this.renderSeat("A15")}
            </div>
            <div className="board-row">
              {this.nullSeat("A1")}
              {this.nullSeat("A2")}
              {this.nullSeat("A3")}
              {this.nullSeat("A4")}
              {this.renderSeat("A5")}
              {this.renderSeat("A6")}
              {this.renderSeat("A7")}
              {this.renderSeat("A8")}
              {this.renderSeat("A9")}
              {this.renderSeat("A10")}
              {this.renderSeat("A11")}
              {this.renderSeat("A12")}
              {this.renderSeat("A13")}
              {this.renderSeat("A14")}
              {this.renderSeat("A15")}
            </div>
            <div className="board-row">
              {this.renderSeat("A1")}
              {this.renderSeat("A2")}
              {this.nullSeat("A3")}
              {this.nullSeat("A4")}
              {this.renderSeat("A5")}
              {this.renderSeat("A6")}
              {this.renderSeat("A7")}
              {this.renderSeat("A8")}
              {this.renderSeat("A9")}
              {this.renderSeat("A10")}
              {this.renderSeat("A11")}
              {this.renderSeat("A12")}
              {this.renderSeat("A13")}
              {this.renderSeat("A14")}
              {this.renderSeat("A15")}
            </div>
            <div className="board-row">
              {this.renderSeat("A1")}
              {this.renderSeat("A2")}
              {this.renderSeat("A3")}
              {this.renderSeat("A4")}
              {this.renderSeat("A5")}
              {this.renderSeat("A6")}
              {this.renderSeat("A7")}
              {this.renderSeat("A8")}
              {this.renderSeat("A9")}
              {this.renderSeat("A10")}
              {this.renderSeat("A11")}
              {this.renderSeat("A12")}
              {this.renderSeat("A13")}
              {this.renderSeat("A14")}
              {this.renderSeat("A15")}
            </div>
          </div>
        </div>
      );
    }
}
