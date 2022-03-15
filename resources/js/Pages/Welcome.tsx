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
        <nav className="navbar colorPrimary shadow p-3">
          {page.props.user ? (
            <div className="container-fluid">
            <InertiaLink
              href={route('dashboard')}
              className="navbar-brand text-white text-sm"
            >
              Inicio
            </InertiaLink>
            </div>
          ) : (
            <>
              <InertiaLink
                href={route('login')}
                className="text-sm text-white-700"
              >
                Iniciar Sesión
              </InertiaLink>

              {canRegister ? (
                <InertiaLink
                  href={route('register')}
                  className="ml-4 text-sm text-white-700"
                >
                 Registrarse
                </InertiaLink>
              ) : null}
            </>
          )}
        </nav>
      ) : null}


        </div>
  );
}
