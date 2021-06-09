import React, {Fragment} from 'react';
import CardComponent from './components/CardComponent';

function RegisterPage() {
    return (
        <Fragment>
            <CardComponent titulo="Hola Mundo" contenido="Mi contenido"/>
            <CardComponent titulo="Hola cesde" contenido="clase react js" />
        </Fragment>
    );
}
export default RegisterPage;
