import React, { useEffect, useState } from "react";
import { Link } from "react-router-dom";
import apiService from "../services/apiService";
import Logo from "../assets/images/logo.svg";

const Header = () => {
  const slug = "main-menu";
  const [menuItems, setMenuItems] = useState([]);

  useEffect(() => {
    apiService
      .getHeaderMenu(slug)
      .then((response) => {
        setMenuItems(response.data);
      })
      .catch((error) => {
        console.log(error);
      });
  }, []);

  return (
    <header>
      <img src={Logo} alt="Logo" />
      <nav>
        <ul>
          {menuItems?.length > 0 &&
            menuItems.map((item) => (
              <li key={item.ID} className={`menu-item-${item.ID}`}>
                <Link to={item.url} target={item?.target}>
                  {item.title}
                </Link>
              </li>
            ))}
        </ul>
      </nav>
    </header>
  );
};

export default Header;
