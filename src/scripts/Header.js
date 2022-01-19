import React, {useState, useEffect} from 'react'
import logoImg from './../assets/logo-julianaPantaleao.svg'

export default function Header() {
  const [openMenu, setOpenMenu] = useState(false);
  const [screenWidth, setScreenWidth] = useState(window.innerWidth);

  const handleOpenMenu = () => {
    setOpenMenu(!openMenu);
  }

  useEffect (() => {

    const changeWidth = () => {
      setScreenWidth(window.innerWidth);
    }

    window.addEventListener('resize', changeWidth);

    return () => {
      window.removeEventListener('resize', changeWidth);
    }

  }, [])

  return (
    <header>
      <div className="container-header">
        <h1>
          <a href="/">
            <img src={logoImg} alt="Logomarca Juliana Pantalão Master Coach" className="logo-header" />
          </a>
        </h1>
        <nav>
          {(openMenu || screenWidth > 767) && (
          <ul>
            <li>
              <a href="/">Home</a>
            </li>
            <li>
              <a href="#quem-sou">Quem Sou</a>
            </li>
            <li>
              <a href="#servicos">Desenvolvimento Pessoal</a>
            </li>
            <li>
              <a href="/">Contato</a>
            </li>
          </ul>
          )}
          <button
          onClick={handleOpenMenu}
          className={`${openMenu ? "btn-active" : ""}`}
          >
            <div className="menu">
              <div>
                <span className="line-1"></span>
                <span className="line-2"></span>
                <span className="line-3"></span>
              </div>
            </div>
          </button>
        </nav>
        <div className="social-icons">

          <a href="#"><i class="fab fa-facebook-square"></i></a>
          <a href="https://instagram.com/julianapantaleao"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </header>
  )
}
