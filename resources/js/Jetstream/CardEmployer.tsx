import React from "react";
import image from "../../css/images/userImage.png"



interface employes {
        nombreEmpleado:string,
        codigoEmpleado:number,
}

export default function ({nombreEmpleado,codigoEmpleado}:employes){

    return (
        <div>
            <div className="card">
                <img src={image} className="card-img-top" alt="imagen de Empleado"/>
                <div className="card-body">
                    <div className="card-title">Cod: {codigoEmpleado}</div>
                    <h6 className="card-text">Nombre: {nombreEmpleado}</h6>
                    <a href="#" className="btn colorPrimary text-white"> Ver Detalles</a>
                </div>
            </div>
        </div>
    );
}
