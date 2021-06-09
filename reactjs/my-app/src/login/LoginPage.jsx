import React, { useState } from 'react'; //hooks
import './LoginStyles.css';
function LoginPage() {
    const [firstname, setFirstname] = useState('');
    const [telephone, setTelephone] = useState('');

    const validateData = (event) => {
        event.preventDefault();
        if(firstname === '' || telephone === ''){
            alert("Debe llenar todos los campos")
        }
        else{
            event.target.reset();
            setFirstname('');
            setTelephone('');
        }
    }
    return (
        <div className="container">
            <div className="row">
                <form onSubmit={validateData} className="col s12">
                    <div className="row">
                        <div className="input-field col s12">
                            <i className="material-icons prefix">account_circle</i>
                            <input id="icon_prefix" type="text" className="validate" onChange={(event) => setFirstname(event.target.value)} />
                            <label for="icon_prefix">First Name {firstname}</label>
                        </div>
                        <div className="input-field col s12">
                            <i className="material-icons prefix">phone</i>
                            <input id="icon_telephone" type="tel" className="validate" onChange={(event) => setTelephone(event.target.value)}/>
                            <label for="icon_telephone">Telephone {telephone}</label>
                        </div>
                    </div>
                    <button className="btn waves-effect waves-light indigo" type="submit" name="action">Submit
                        <i className="material-icons right">send</i>
                    </button>
                </form>
            </div>
        </div>
    );
}
export default LoginPage;

