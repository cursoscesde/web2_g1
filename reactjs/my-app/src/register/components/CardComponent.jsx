import React, { Fragment } from 'react';

function CardComponent(props) {
    const {titulo, contenido} = props;
    return (
        <Fragment>
            <div className="row">
                <div className="col s12 m6">
                    <div className="card blue-grey darken-1">
                        <div className="card-content white-text">
                            <span className="card-title">{titulo}</span>
                            <p>{contenido}</p>
                        </div>
                        <div className="card-action">
                            <a href="#">This is a link</a>
                            <a href="#">This is a link</a>
                        </div>
                    </div>
                </div>
            </div>
        </Fragment>
    );
}
export default CardComponent;