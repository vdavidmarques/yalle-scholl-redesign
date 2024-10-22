// components/CommunityBulletin.js
import React, { useEffect, useState } from "react";
import apiService from "../services/apiService";

const CommunityBulletin = ({ slug }) => {
  const [content, setContent] = useState({column1:"", column2:""});
  useEffect(() => {
    apiService
      .getPageBySlug(slug)
      .then((response) => {
        setContent({
          column1: response.data[0].acf.communityBulletinBoardCollum1,
          column2: response.data[0].acf.communityBulletinBoardCollum2,
        });
      })
      .catch((error) => {
        console.log(error);
      });
  });
  return (
    <section className="community-bulletin">
      <article>
        <div dangerouslySetInnerHTML={{ __html: content.column1 }} />
        <div dangerouslySetInnerHTML={{ __html: content.column2 }} />
      </article>
    </section>
  );
};

export default CommunityBulletin;
