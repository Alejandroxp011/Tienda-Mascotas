import { InertiaLink } from '@inertiajs/inertia-react';
import React from 'react';
import Logo from './Logo'
export default function JetAuthenticationCardLogo() {
  return (
    <InertiaLink href="/">
      <div>
      <Logo/>
      </div>

    </InertiaLink>
  );
}
