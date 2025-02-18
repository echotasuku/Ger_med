import { render, screen } from '@testing-library/react';
import App from './App';

test('renders Bem-vindo a Secretaria de Saúde', () => {
  render(<App />);
  const linkElement = screen.getByText(/Bem-vindo a Secretaria de Saúde/i);
  expect(linkElement).toBeInTheDocument();
});
