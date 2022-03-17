import { InertiaLink } from '@inertiajs/inertia-react';
import React, { PropsWithChildren } from 'react';

interface Props {
  href: string;
  active?: boolean;
}

export default function JetNavLink({
  active,
  href,
  children,
}: PropsWithChildren<Props>) {
  const classes = active
    ? 'inline-flex items-center px-1 pt-2 border-b-2 border-yellow-400 text-sm font-medium leading-5 text-white  focus:border-yellow-400 transition'
    : 'inline-flex items-center px-1 pt-2 border-b-2 border-yellow-400 text-sm font-medium leading-5 text-white hover:text-white hover:border-yellow-400  focus:text-white focus:border-yellow-400 transition';

  return (
    <InertiaLink href={href} className={classes}>
      {children}
    </InertiaLink>
  );
}
