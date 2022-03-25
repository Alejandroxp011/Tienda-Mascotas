import React from "react";
import {EMPLEADOS} from "@/const/employes";
import CardEmployer from "@/Jetstream/CardEmployer";
import AppLayout from "@/Layouts/AppLayout";

export default function () {

    return(
        <div>
            <AppLayout
                title="Empleados"

            >
                <div className="container">
                    <div>
                        <div className="mb-3 row">
                            <label htmlFor="formGroupExampleInput" className="form-label"> </label>
                            <input type="text" className="form-control col" id="formGroupExampleInput"
                                   placeholder="Buscar por nombre"/>
                            <button type="button" className="btn btn-primary col col-lg-2">Añadir empleado</button>
                        </div>


                    </div>
                    <div className="row">
                        <div className="col-2">
                            {EMPLEADOS.map((card)=>(
                                <CardEmployer{...card}>

                                </CardEmployer>
                            ))}
                        </div>

                    </div>

                </div>

            </AppLayout>

        </div>
    );
}
