import { InertiaLink } from '@inertiajs/inertia-react';
import React from 'react';
import useRoute from '@/Hooks/useRoute';
import useTypedPage from '@/Hooks/useTypedPage';
// @ts-ignore
import { Head } from '@inertiajs/inertia-react';

interface Props {
  canLogin: boolean;
  canRegister: boolean;
  laravelVersion: string;
  phpVersion: string;
}

export default function Welcome({
  canLogin,
  canRegister,
  laravelVersion,
  phpVersion,
}: Props) {
  const route = useRoute();
  const page = useTypedPage();

  return (
    <div>
      <Head title="Bienvenido" />

      {canLogin ? (
        <nav className="navbar colorPrimary justify-content-start shadow p-3">
          {page.props.user ? (
            <div className="container-fluid">
            <InertiaLink
              href={route('dashboard')}
              className="btn btn-outline text-white text-sm"
            >
              Inicio
            </InertiaLink>
            </div>
          ) : (
            <div className='container-fluid justify-content-end'>
              <InertiaLink
                href={route('login')}
                className="btn btn-outline-light text-white text-sm me-2"
              >
                Iniciar Sesión
              </InertiaLink>

              {canRegister ? (
                <InertiaLink
                  href={route('register')}
                  className="btn btn-outline-light text-white text-sm"
                >
                 Registrarse
                </InertiaLink>
              ) : null}
            </div>
          )}
        </nav>
      ) : null}


        </div>
  );
}
